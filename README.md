# Что за сайт?

Это учебный проект, в рамках которого изучалось создание базовых сайтов.
В данном проекте применен less препроцессор для упрощения работы с css кодом. Также использовался bootstrap для создания адаптивной сетки сайта. Для компиляции less кода в css код был создан docker image, запускающий node.js, которые в свою очередь устанавливает и использует нужный компилятор кода.

Для компиляции css кода из less кода следует запустить docker и использовать следующие команды:

```powershell
docker build --no-cache -t less-compiler .
docker-compose up
```