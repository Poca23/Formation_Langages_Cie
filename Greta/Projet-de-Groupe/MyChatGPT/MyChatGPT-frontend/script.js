document.addEventListener("DOMContentLoaded", () => {
  // Elements
  const sidebar = document.getElementById("sidebar");
  const toggleSidebar = document.getElementById("toggleSidebar");
  const chatInput = document.querySelector(".chat-input");
  const sendButton = document.querySelector(".send-button");
  const chatMessages = document.getElementById("chatMessages");
  const menuDropdown = document.getElementById("menuDropdown");
  const dropdown = menuDropdown.parentElement;
  const helpBtn = document.querySelector(".help-btn");
  const helpChat = document.getElementById("helpChat");
  const closeHelpChat = document.querySelector(".close-help-chat");

  // Auto-resize textarea
  function autoResizeTextarea(textarea) {
    textarea.style.height = "auto";
    textarea.style.height = textarea.scrollHeight + "px";
    const maxHeight = 200;
    if (textarea.scrollHeight > maxHeight) {
      textarea.style.height = maxHeight + "px";
      textarea.style.overflowY = "auto";
    } else {
      textarea.style.overflowY = "hidden";
    }
  }

  // Handle textarea input
  chatInput.addEventListener("input", () => {
    autoResizeTextarea(chatInput);
  });

  // Handle Enter key
  chatInput.addEventListener("keydown", (e) => {
    if (e.key === "Enter" && !e.shiftKey) {
      e.preventDefault();
      handleSendMessage();
    }
  });

  // Toggle sidebar
  toggleSidebar.addEventListener("click", () => {
    sidebar.classList.toggle("active");
  });

  // Close sidebar when clicking outside on mobile
  document.addEventListener("click", (e) => {
    if (window.innerWidth <= 768) {
      if (!sidebar.contains(e.target) && !toggleSidebar.contains(e.target)) {
        sidebar.classList.remove("active");
      }
    }
  });

  // Handle send message
  function handleSendMessage() {
    const message = chatInput.value.trim();
    if (message) {
      appendMessage(message, "user");
      chatInput.value = "";
      autoResizeTextarea(chatInput);
      // Simulate bot response
      setTimeout(() => {
        appendMessage("Je suis en train de traiter votre message...", "bot");
      }, 1000);
    }
  }

  // Send button click
  sendButton.addEventListener("click", handleSendMessage);

  // Append message to chat
  function appendMessage(content, type) {
    const messageDiv = document.createElement("div");
    messageDiv.className = `message ${type}-message`;

    const time = new Date().toLocaleTimeString([], {
      hour: "2-digit",
      minute: "2-digit",
    });

    messageDiv.innerHTML = `
            ${
              type === "bot"
                ? '<div class="message-avatar"><i class="fas fa-robot"></i></div>'
                : ""
            }
            <div class="message-content">
                <div class="message-header">
                    <span class="message-sender">${
                      type === "user" ? "Vous" : "Assistant"
                    }</span>
                    <span class="message-time">${time}</span>
                </div>
                <p>${content}</p>
            </div>
            ${
              type === "user"
                ? '<div class="message-avatar"><i class="fas fa-user"></i></div>'
                : ""
            }
        `;

    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;

    // Animation
    messageDiv.style.opacity = "0";
    messageDiv.style.transform = "translateY(20px)";
    requestAnimationFrame(() => {
      messageDiv.style.transition = "all 0.3s ease";
      messageDiv.style.opacity = "1";
      messageDiv.style.transform = "translateY(0)";
    });
  }

  // Dropdown Menu
  menuDropdown.addEventListener("click", (e) => {
    e.stopPropagation();
    dropdown.classList.toggle("active");
  });

  // Close dropdown when clicking outside
  document.addEventListener("click", (e) => {
    if (!dropdown.contains(e.target)) {
      dropdown.classList.remove("active");
    }
  });

  // Help Chat
  helpBtn.addEventListener("click", () => {
    helpChat.classList.toggle("active");
    if (helpChat.classList.contains("active")) {
      helpChat.style.animation = "slideIn 0.3s ease";
    }
  });

  closeHelpChat.addEventListener("click", () => {
    helpChat.classList.remove("active");
  });

  // Dark Mode Toggle
  const darkModeToggle = document.querySelector(".dropdown-item:nth-child(3)");

  function toggleDarkMode() {
    document.body.classList.toggle("dark-mode");
    const isDarkMode = document.body.classList.contains("dark-mode");
    localStorage.setItem("darkMode", isDarkMode);
  }

  darkModeToggle.addEventListener("click", (e) => {
    e.preventDefault();
    toggleDarkMode();
  });

  // Check for saved dark mode preference
  if (localStorage.getItem("darkMode") === "true") {
    document.body.classList.add("dark-mode");
  }

  // Conversation Items Click
  const conversationItems = document.querySelectorAll(".conversation-item");
  conversationItems.forEach((item) => {
    item.addEventListener("click", () => {
      conversationItems.forEach((i) => i.classList.remove("active"));
      item.classList.add("active");
      if (window.innerWidth <= 768) {
        sidebar.classList.remove("active");
      }
    });
  });

  // Handle window resize
  window.addEventListener("resize", () => {
    if (window.innerWidth > 768) {
      sidebar.classList.remove("active");
    }
  });
});
