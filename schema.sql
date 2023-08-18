DROP TABLE IF EXISTS "users";
DROP SEQUENCE IF EXISTS "User_id_seq";
CREATE SEQUENCE "User_id_seq" increment by 1 minvalue 1 start with 1 cache 1;

CREATE TABLE "users" (
    "id" integer DEFAULT nextval('"User_id_seq"') NOT NULL,
    "ci" integer NOT null UNIQUE,
    "name" character varying(250),
    "last_name" character varying(250),
    "email" character varying(250) UNIQUE,
    "password" character varying(250),
    "registration_date" date DEFAULT CURRENT_DATE NOT NULL,
    "status" character varying(250) DEFAULT 'pending' NOT NULL,
    "role" character varying(250) DEFAULT 'client' NOT NULL,
    CONSTRAINT "User_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "users" ("ci", "name", "last_name", "email", "password", "registration_date", "status", "role")
VALUES ('29756468', 'Christian', 'Rincon', 'christian.daniel.ve@gmail.com', NULL, now(), 'active', 'admin');
