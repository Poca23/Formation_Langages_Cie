import ApiService from "../services/ApiService.js";
import { sanitizeInput } from "../utils/helpers.js";

export class ChatController {
  constructor(eventEmitter) {
    this.eventEmitter = eventEmitter;
    this.chatForm = document.getElementById("chatForm");
    this.userInput = document.getElementById("userInput");
    this.chatMessages = document.getElementById("chatMessages");
    this.init();
  }

  init() {
    this.chatForm.addEventListener("submit", (e) => this.handleSubmit(e));
  }

  async handleSubmit(e) {
    e.preventDefault();
    const message = sanitizeInput(this.userInput.value.trim());

    if (!message) return;

    this.addMessage(message, "user");
    this.userInput.value = "";

    try {
      const response = await this.sendMessage(message);
      this.addMessage(response.message, "bot");
    } catch (error) {
      this.eventEmitter.emit("error", error);
    }
  }

  addMessage(content, type) {
    const messageDiv = document.createElement("div");
    messageDiv.className = `message message-${type} fade-in`;
    messageDiv.innerHTML = `<p>${content}</p>`;
    this.chatMessages.appendChild(messageDiv);
    this.chatMessages.scrollTop = this.chatMessages.scrollHeight;
  }

  async sendMessage(message) {
    return await ApiService.post("/chat", { message });
  }
}
