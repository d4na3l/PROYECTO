DROP TABLE IF EXISTS "users";
DROP TABLE IF EXISTS "clients";
DROP SEQUENCE IF EXISTS "User_id_seq";
DROP SEQUENCE IF EXISTS "Client_id_seq";
CREATE SEQUENCE "User_id_seq" increment by 1 minvalue 1 start with 1 cache 1;
CREATE SEQUENCE "Client_id_seq" increment by 1 minvalue 1 start with 1 cache 1;


CREATE TABLE "users" (
    "user_id" integer DEFAULT nextval('User_id_seq') NOT NULL,
    "ci" integer NOT null UNIQUE,
    "email" character varying(250) UNIQUE,
    "password" character varying(250),
    "status" character varying(250) DEFAULT 'pending' NOT NULL,
    "role" character varying(250) DEFAULT 'client' NOT NULL,
    "created_at" date DEFAULT CURRENT_DATE NOT NULL,
    CONSTRAINT "User_pkey" PRIMARY KEY ("user_id")
) WITH (oids = false);

CREATE TABLE "clients" (
    "client_id" integer DEFAULT nextval('Client_id_seq') NOT NULL,
    "user_id" integer NOT NULL,
    "first_name" character varying(250),
    "last_name" character varying(250),
    "bank_name" character varying(250) NOT NULL,
    "account_number" integer NOT NULL UNIQUE,
    "account_type" character varying(250) NOT NULL,
    "created_at" date DEFAULT CURRENT_DATE NOT NULL,
    CONSTRAINT "Client_pkey" PRIMARY KEY ("client_id"),
    CONSTRAINT "Client_fkey" FOREIGN KEY ("user_id") REFERENCES "users"("user_id")
) WITH (oids = false);

INSERT INTO "users" ("ci", "email", "password", "status", "role", "created_at")
VALUES ('29756468', 'christian.daniel.ve@gmail.com', '$2y$15$N6AxPrNtuoaBgFJIojIJVOV5sT37O/H6ZF/mD2DSx3s8Ad7eSgjma', 'active', 'admin', now());
INSERT INTO "users" ("ci", "email","role", "created_at")
VALUES ('12345678', 'testuser1@gmail.com', 'analyst', now());
INSERT INTO "users" ("ci", "email","role", "created_at")
VALUES ('87654321', 'testuser2@gmail.com', 'client', now());

-- si no saben cual es su password hash, hagan el siguiente insert y luego hagan el signup de la aplicacion :D
-- INSERT INTO "users" ("ci", "email", "role", "created_at")
-- VALUES ('pontucontraseña', 'pontuemailaqui@email.com','admin', now());
