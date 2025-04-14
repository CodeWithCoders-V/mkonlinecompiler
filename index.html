<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EduVault Online Compiler</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #0e0e1a;
      color: #f5f5f5;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      min-height: 100vh;
      overflow-y: auto;
      transition: background-color 0.3s ease, color 0.3s ease;
      padding-bottom: 60px; /* Adds space at the bottom to avoid footer overlap */
    }

    h1 {
      font-size: 2.2rem;
      margin-bottom: 10px;
      color: #66ffcc;
    }

    form {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 16px;
      padding: 20px;
      width: 95%;
      max-width: 1000px;
      box-shadow: 0 0 20px rgba(0, 255, 170, 0.2);
      display: flex;
      flex-direction: column;
      align-items: stretch;
    }

    select, button {
      background-color: #1f1f2e;
      color: #fff;
      padding: 10px 15px;
      border-radius: 8px;
      border: none;
      margin: 10px 5px 20px 0;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s;
    }

    select:hover, button:hover {
      background-color: #66ffcc;
      color: #000;
    }

    select {
      width: 150px;
    }

    .code-container {
      display: flex;
      flex-direction: column;
      position: relative;
      width: 100%;
    }

    .code-editor {
      width: 100%;
      height: 350px;
      padding: 15px;
      font-size: 1rem;
      background-color: #151521;
      color: #00ffcc;
      border: 1px solid #333;
      border-radius: 10px;
      resize: vertical;
      font-family: 'Fira Code', monospace;
      margin-top: 10px;
      overflow-y: auto;
      line-height: 1.5;
      white-space: pre-wrap;
      word-wrap: break-word;
    }

    h2 {
      margin-top: 30px;
      font-size: 1.5rem;
      color: #00ffaa;
    }

    #outputSection {
      margin-top: 30px;
      width: 95%;
      max-width: 1000px;
      padding: 20px;
      background-color: #151521; /* Dark mode background for output */
      border-radius: 10px;
      border: 1px solid #333;
      box-shadow: 0 0 20px rgba(0, 255, 170, 0.2);
      font-family: 'Fira Code', monospace;
      transition: background-color 0.3s ease;
    }

    #outputText {
      background: #111;
      color: #00ff88;
      padding: 20px;
      border-radius: 10px;
      width: 100%;
      overflow-x: auto;
      font-size: 1rem;
      line-height: 1.5;
      margin-top: 10px;
      border: 1px solid #333;
    }

    .btns {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .clear-btn {
      background-color: #ff4b5c;
    }

    .clear-btn:hover {
      background-color: #ff707e;
      color: #000;
    }

    /* Sun and Moon toggle button */
    .theme-toggle-btn {
      position: fixed;
      top: 20px;
      right: 20px;
      background-color:rgb(236, 119, 119);
      border-radius: 50%;
      padding: 15px;
      cursor: pointer;
      border: none;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s ease;
    }

    .theme-toggle-btn:hover {
      background-color:rgb(138, 85, 85);
    }

    .theme-toggle-btn i {
      font-size: 1.5rem;
      color: #333;
    }

    /* Light Mode Styles */
    .light-mode {
      background-color: #f5f5f5;
      color: #333;
    }

    .light-mode .code-editor {
      background-color: #ffffff;
      color: #333;
    }

    .light-mode h1, .light-mode h2 {
      color: #333;
    }

    .light-mode .btns button {
      background-color:rgb(189, 185, 185);
      color: #333;
    }

    .light-mode .btns button:hover {
      background-color:rgb(169, 247, 97);
    }

    /* Dark Mode Styles */
    .dark-mode {
      background-color: #0e0e1a;
      color: #f5f5f5;
    }

    .dark-mode .code-editor {
      background-color: #151521;
      color: #00ffcc;
    }

    .dark-mode h1, .dark-mode h2 {
      color: #66ffcc;
    }

    .dark-mode .btns button {
      background-color: #1f1f2e;
      color: #fff;
    }

    .dark-mode .btns button:hover {
      background-color: #66ffcc;
      color: #000;
    }

    @media (max-width: 600px) {
      .code-editor {
        height: 250px;
      }

      h1 {
        font-size: 1.6rem;
      }

      .btns {
        flex-direction: column;
        gap: 10px;
      }
    }

    #output {
      white-space: pre-wrap;
      font-family: monospace;
      padding: 10px;
      border-radius: 8px;
      background-color: var(--output-bg, #1e1e1e);
      color: var(--output-color, #eee);
    }

    /* Footer Styles */
    footer {
      width: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      color: #fff;
      padding: 15px 20px;
      text-align: center;
      position: fixed;
      bottom: 0;
      left: 0;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 255, 170, 0.3);
      font-size: 0.9rem;
      font-family: 'Segoe UI', sans-serif;
    }

    footer p {
      margin: 0;
      color: #66ffcc;
    }

    footer p:hover {
      color: #00ffaa;
    }
  </style>
</head>
<body class="dark-mode">
  <h1>EduVault Online Compiler</h1>

  <form id="codeForm">
    <select name="language" id="language">
      <option value="python">Python</option>
      <option value="cpp">C++</option>
      <option value="c">C</option>
      <option value="java">Java</option>
    </select>

    <div class="code-container">
      <textarea name="code" id="codeInput" class="code-editor" placeholder="Write your code here..."></textarea>
    </div>

    <div class="btns">
      <button type="submit">Run Code</button>
      <button type="button" class="clear-btn" onclick="document.getElementById('codeInput').value = ''">Clear Code</button>
    </div>
  </form>

  <div id="outputSection">
    <h2>Output:</h2>
    <pre id="outputText">Please write and run your code...</pre>
  </div>

  <!-- Theme Toggle Button (Sun/Moon) -->
  <button class="theme-toggle-btn" onclick="toggleTheme()">
    <i id="theme-icon" class="fa fa-sun"></i> <!-- Sun icon by default -->
  </button>

  <!-- Footer Section -->
  <footer>
    <p>© 2025 EduVault Online Compiler | Designed by Mr. Khan 😊</p>
  </footer>

  <script>
    const form = document.getElementById('codeForm');
    const outputSection = document.getElementById('outputSection');
    const outputText = document.getElementById('outputText');
    const codeInput = document.getElementById('codeInput');
    const themeToggleBtn = document.querySelector('.theme-toggle-btn');
    const themeIcon = document.getElementById('theme-icon');

    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      const language = document.getElementById('language').value;
      const code = codeInput.value;

      // Show the output section
      outputText.textContent = 'Running...';

      // Smooth scroll to the output section
      window.scrollTo({
        top: outputSection.offsetTop - 50,
        behavior: 'smooth'
      });

      // Send the code to the server using AJAX
      const response = await fetch('run.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `language=${encodeURIComponent(language)}&code=${encodeURIComponent(code)}`
      });

      const result = await response.text();
      outputText.textContent = result;
    });

    function toggleTheme() {
      document.body.classList.toggle('light-mode');
      document.body.classList.toggle('dark-mode');
      const isLightMode = document.body.classList.contains('light-mode');

      // Update the icon and button colors
      if (isLightMode) {
        themeIcon.classList.remove('fa-sun');
        themeIcon.classList.add('fa-moon');
      } else {
        themeIcon.classList.remove('fa-moon');
        themeIcon.classList.add('fa-sun');
      }
    }
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
