class ApiService {
  constructor() {
    this.baseUrl = "https://api.example.com/v1";
    this.headers = {
      "Content-Type": "application/json",
    };
  }

  async setAuthToken(token) {
    this.headers.Authorization = `Bearer ${token}`;
  }

  async get(endpoint) {
    try {
      const response = await fetch(`${this.baseUrl}${endpoint}`, {
        method: "GET",
        headers: this.headers,
      });
      return this.handleResponse(response);
    } catch (error) {
      this.handleError(error);
    }
  }

  async post(endpoint, data) {
    try {
      const response = await fetch(`${this.baseUrl}${endpoint}`, {
        method: "POST",
        headers: this.headers,
        body: JSON.stringify(data),
      });
      return this.handleResponse(response);
    } catch (error) {
      this.handleError(error);
    }
  }

  async handleResponse(response) {
    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }
    return await response.json();
  }

  handleError(error) {
    console.error("API Error:", error);
    throw error;
  }
}

export default new ApiService();
