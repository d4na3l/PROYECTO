-- Drop tables and sequences if they exist
DROP TABLE IF EXISTS "financial_states";
DROP TABLE IF EXISTS "clients";
DROP TABLE "users" CASCADE;

DROP SEQUENCE IF EXISTS "financial_state_id_seq";
DROP SEQUENCE IF EXISTS "client_id_seq";
DROP SEQUENCE IF EXISTS "user_id_seq";

-- Create sequences
CREATE SEQUENCE "user_id_seq" increment by 1 minvalue 1 start with 1 cache 1;
CREATE SEQUENCE "client_id_seq" increment by 1 minvalue 1 start with 1 cache 1;
CREATE SEQUENCE "financial_state_id_seq" increment by 1 minvalue 1 start with 1 cache 1;

-- Create tables
CREATE TABLE "users" (
    "user_id" INTEGER DEFAULT nextval('"user_id_seq"') NOT NULL PRIMARY KEY,
    "ci" INTEGER NOT NULL UNIQUE,
    "email" VARCHAR(250) UNIQUE,
    "password" VARCHAR(250),
    "status" VARCHAR(50) DEFAULT 'pending' NOT NULL,
    "role" VARCHAR(50) DEFAULT 'client' NOT NULL,
    "created_at" DATE DEFAULT CURRENT_DATE NOT NULL
);

CREATE TABLE "clients" (
    "client_id" INTEGER DEFAULT nextval('"client_id_seq"') NOT NULL PRIMARY KEY,
    "user_id" INTEGER REFERENCES users ("user_id") ON DELETE CASCADE,
    "first_name" VARCHAR(250),
    "last_name" VARCHAR(250),
    "bank_name" VARCHAR(250) NOT NULL,
    "account_number" BIGINT NOT NULL UNIQUE,
    "account_type" VARCHAR(250) NOT NULL,
    "created_at" DATE DEFAULT CURRENT_DATE NOT NULL
);

CREATE TABLE "financial_states" (
    "financial_state_id" INTEGER DEFAULT nextval('"financial_state_id_seq"') NOT NULL PRIMARY KEY,
    "client_id" INTEGER REFERENCES clients ("client_id") ON DELETE CASCADE,
    "income_aportes" NUMERIC,
    "income_interests" NUMERIC,
    "income_others" NUMERIC,
    "expense_administrative" NUMERIC,
    "expense_bank_fees" NUMERIC,
    "expense_investments" NUMERIC,
    "expense_common" NUMERIC,
    "account_balance" NUMERIC,
    "created_at" DATE DEFAULT CURRENT_DATE NOT NULL
);

INSERT INTO "users" ("ci", "email", "password", "status", "role", "created_at")
VALUES ('29756468', 'christian.daniel.ve@gmail.com', '$2y$15$N6AxPrNtuoaBgFJIojIJVOV5sT37O/H6ZF/mD2DSx3s8Ad7eSgjma', 'active', 'admin', now());
INSERT INTO "users" ("ci", "email","role", "created_at")
VALUES ('12345678', 'testuser1@gmail.com', 'analyst', now());
INSERT INTO "users" ("ci", "email","role", "created_at")
VALUES ('87654321', 'testuser2@gmail.com', 'client', now());

INSERT INTO "clients" ("user_id", "first_name", "last_name", "bank_name", "account_number", "account_type")
VALUES (3, 'Maria', 'Lopez', 'Banco Mercantil', 1324123412341234, 'Cuenta de débito');

INSERT INTO "financial_states" ("client_id", "income_aportes", "income_interests", "income_others", "expense_administrative", "expense_bank_fees", "expense_investments", "expense_common", "account_balance")
VALUES (1, 15000, 750, 300, 150, 75, 300, 150, 17500);



-- si no saben cual es su password hash, hagan el siguiente insert y luego hagan el signup de la aplicacion :D
-- INSERT INTO "users" ("ci", "email", "role", "created_at")
-- VALUES ('pontucontraseña', 'pontuemailaqui@email.com','admin', now());


-- si no saben cual es su password hash, hagan el siguiente insert y luego hagan el signup de la aplicacion :D
-- INSERT INTO "users" ("ci", "email", "role", "created_at")
-- VALUES ('pontucontraseña', 'pontuemailaqui@email.com','admin', now());
