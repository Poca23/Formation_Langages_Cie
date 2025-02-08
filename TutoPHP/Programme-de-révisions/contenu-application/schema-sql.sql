-- Création de la table 'users'
CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name VARCHAR
(255) NOT NULL,
    email VARCHAR
(255) UNIQUE NOT NULL,
    password VARCHAR
(255) NOT NULL,
    theme_preference VARCHAR
(50) DEFAULT 'light',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Création de la table 'sections'
CREATE TABLE sections (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name VARCHAR
(255) NOT NULL UNIQUE,
    description TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Création de la table 'chapters'
CREATE TABLE chapters (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    section_id INTEGER NOT NULL,
    title VARCHAR
(255) NOT NULL,
    "order" INTEGER NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY
(section_id) REFERENCES sections
(id) ON
DELETE CASCADE
);

-- Création de la table 'lessons'
CREATE TABLE lessons (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    chapter_id INTEGER NOT NULL,
    content TEXT NOT NULL,
    example TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY
(chapter_id) REFERENCES chapters
(id) ON
DELETE CASCADE
);

-- Création de la table 'quizzes'
CREATE TABLE quizzes (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    chapter_id INTEGER NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY
(chapter_id) REFERENCES chapters
(id) ON
DELETE CASCADE
);

-- Création de la table 'questions'
CREATE TABLE questions (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    quiz_id INTEGER NOT NULL,
    question_text TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY
(quiz_id) REFERENCES quizzes
(id) ON
DELETE CASCADE
);

-- Création de la table 'answers'
CREATE TABLE answers (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    question_id INTEGER NOT NULL,
    answer_text TEXT NOT NULL,
    is_correct BOOLEAN NOT NULL DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY
(question_id) REFERENCES questions
(id) ON
DELETE CASCADE
);

-- Création de la table 'user_progress'
CREATE TABLE user_progress (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    user_id INTEGER NOT NULL,
    chapter_id INTEGER NOT NULL,
    quiz_completed BOOLEAN NOT NULL DEFAULT 0,
    score INTEGER,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY
(user_id) REFERENCES users
(id) ON
DELETE CASCADE,
    FOREIGN KEY (chapter_id)
REFERENCES chapters
(id) ON
DELETE CASCADE
);
