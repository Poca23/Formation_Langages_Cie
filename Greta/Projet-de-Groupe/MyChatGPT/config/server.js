// config/server.js
const handler = require("serve-handler");
const http = require("http");

const server = http.createServer((request, response) => {
  return handler(request, response, {
    public: "public",
    rewrites: [{ source: "/src/**", destination: "/src/**" }],
  });
});

server.listen(3000, () => {
  console.log("Server running at http://localhost:3000");
});
