

# 🚀 EduBuddy — AI-Powered Learning Platform

<div align="center">

<img src="./assets/banner.png" alt="EduBuddy Banner" width="100%" />

<br/>

![React](https://img.shields.io/badge/Frontend-React%2019-blue?logo=react)
![TypeScript](https://img.shields.io/badge/Language-TypeScript-blue?logo=typescript)
![Flask](https://img.shields.io/badge/Backend-Flask-green?logo=flask)
![Python](https://img.shields.io/badge/Python-3.10+-blue?logo=python)
![License](https://img.shields.io/badge/License-MIT-green)
![Status](https://img.shields.io/badge/Status-Active-success)

<br/>

**AI-powered learning, productivity, and collaboration — all in one place. 🎓**

Transform the way you study with intelligent tools, community support, and gamified progress tracking.

<br/>

[🎥 Demo](#-demo) • [✨ Features](#-features) • [⚙️ Installation](#️-installation) • [🏗️ Architecture](#️-architecture) • [🛣️ Roadmap](#️-roadmap)

</div>

---

# 🎥 Demo

> ⚠️ Add your demo GIF or screenshots inside `/assets`

```bash
/assets/demo.gif
````

* 🌐 Live App: *Coming soon*
* 📺 Demo Video: *Coming soon*

---

# 💡 Why EduBuddy?

Students often face:

* 📚 Disorganized learning resources
* ❌ Lack of consistency and motivation
* 🤯 Difficulty understanding complex topics

**EduBuddy solves this by combining:**

* 🤖 AI-powered explanations
* 👥 Collaborative learning
* 🏆 Gamified progress tracking

---

# ✨ Features

## 🤖 AI Learning Assistant

* 24/7 academic support
* Code explanations & debugging help
* Multi-subject coverage (Math, Programming, Databases, Web…)

---

## 📂 AI Chat with File Upload

Interact with your study materials directly.

* Upload **PDF, DOCX, TXT, CSV, MD**
* AI extracts and analyzes content
* Ask contextual questions about your files

```bash
POST /api/ai/upload-file
POST /api/ai/chat (with file_id)
```

---

## 📊 Activity Calendar (GitHub Style)

Track your learning consistency visually.

* 🔥 Daily streak tracking
* 📅 Full-year activity heatmap
* 🎯 Motivation through visual progress

---

## 👥 Community & Collaboration

* Q&A forum
* Resource sharing
* Discussion threads

---

## 🏆 Gamification System

* 🎖️ Achievements
* 🔥 Learning streaks
* 💯 Points system

---

## 📚 Resource Management

* Organize courses, TDs, TPs, exams
* Upload and share files
* Fast and structured search

---

## 🎨 Modern UI/UX

* 🌙 Dark mode
* ⚡ Smooth animations (GSAP)
* 📱 Fully responsive

---

# 📸 Screenshots

<div align="center">

<img src="./assets/dashboard.png" width="80%" />
<img src="./assets/calendar.png" width="80%" />
<img src="./assets/chat.png" width="80%" />

</div>

---

# ⚙️ Installation

## 1. Clone Repository

```bash
git clone https://github.com/your-username/edubuddy.git
cd edubuddy
```

---

## 2. Frontend Setup

```bash
cd app
npm install
npm run dev
```

---

## 3. Backend Setup

```bash
cd edubuddy-backend
pip install -r requirements.txt
python app.py
```

---

## 4. Environment Variables

Create a `.env` file:

```env
OPENAI_API_KEY=your_key
DATABASE_URL=your_db_url
```

---

# 🏗️ Architecture

```
User
  ↓
React (Frontend)
  ↓
Flask API (Backend)
  ↓
AI Engine + Database
  ↓
Response
```

---

## 🧩 Tech Stack

| Layer    | Technology                |
| -------- | ------------------------- |
| Frontend | React + TypeScript + Vite |
| Backend  | Flask                     |
| Database | SQLite / PostgreSQL       |
| AI       | OpenAI API                |
| UI       | Tailwind CSS + Radix UI   |

---

# 🔌 API Examples

## Activity Calendar

```http
GET /api/user/activity-calendar?user_id=1&year=2026
```

---

## AI Chat with File

```http
POST /api/ai/chat
```

```json
{
  "message": "Summarize this document",
  "user_id": 1,
  "file_id": 1
}
```

---

# 🧠 Highlights

* ⚡ Fast and responsive UI
* 🤖 AI-powered learning
* 📁 File-aware chat system
* 📊 Visual learning analytics

---

# 🛣️ Roadmap

* [x] AI Chat Assistant
* [x] File Upload & Analysis
* [x] Activity Calendar
* [x] Gamification System
* [ ] AI Study Planner
* [ ] Real-time Collaboration
* [ ] Mobile App (React Native)
* [ ] Notifications System

---

# 🤝 Contributing

Contributions are welcome.

```bash
1. Fork the repository
2. Create a branch (feature/your-feature)
3. Commit changes
4. Open a Pull Request
```

---

# 📄 License

This project is licensed under the MIT License.

---

# ⭐ Support

If you find this project useful:

👉 Star the repository
👉 Share it with others

---

<div align="center">

**Built for students who want to learn smarter, not harder.**

</div>
```

---

