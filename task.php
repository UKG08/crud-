<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .task-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
        }
        .task-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            width: 300px;
        }
        .task-title {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .task-description {
            margin-bottom: 15px;
        }
        .task-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .task-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Task Manager</h1>
    </div>
    <div class="task-container">
        <div class="task-card">
            <h2 class="task-title">Task 1</h2>
            <p class="task-description">This is the description of Task 1.</p>
            <div class="task-buttons">
                <button class="task-button">Edit</button>
                <button class="task-button">Delete</button>
            </div>
        </div>
        <div class="task-card">
            <h2 class="task-title">Task 2</h2>
            <p class="task-description">This is the description of Task 2.</p>
            <div class="task-buttons">
                <button class="task-button">Edit</button>
                <button class="task-button">Delete</button>
            </div>
        </div>
        <!-- Add more task cards as needed -->
    </div>
</body>
</html>
