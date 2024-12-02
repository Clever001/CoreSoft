# Используем официальное изображение Node.js
FROM node:23-alpine

# Устанавливаем рабочую директорию
WORKDIR /app

# Копируем только package.json и package-lock.json для установки зависимостей
COPY package*.json ./

# Устанавливаем зависимости
RUN npm install -g less

# Копируем всё содержимое проекта
COPY . .

# Команда для сборки проекта
ENTRYPOINT ["npm", "run", "build"]
