# Приложение написано на языках: js,php,css,html. Разработка велась в phpstorm.interpreter - php 8.0.28. php language level - 5.6.
# Наименование работы: «Реализация модуля для создания приоритетной очереди с помощью двоичной кучи».Для необходимой и достаточной работы приложения был разработан дополнительный функционал и модули "сайта завода", для возможности добавления\удаления\редактирования\сохранения\скачивания\выбора и замены файла\бд.+ Был создан функционал для сортировки(обычной и обратной) таблицы относительно каждого из столбцов.
# Принцип работы приложения
### Программа представляет собой сайт завода.
### Она позволяет администратору следующее:
###     • добавлять новые элементы-продукцию;
###     • изменять характеристики и удалять уже находящуюся в каталоге продукцию;
###     • посмотреть список  всей продукции завода;
###     • отсортировать каталог предоставляемой продукции завода на основе приоритетной очереди с использованием кучи;
###     • скачать базу данных;
### Для пользователя приложение предоставляет следующие возможности:
###    • добавлять в базу данных заказ;
###    • просмотр\изучение сайта завода;
# Описание программных модулей                                                                                                                             
# Вход в систему  start_screen.html.                                                                                          
### Данный виджет представляет из себя первую демонстрационную страницу с выбором типа учетной записи ; учетной записи пользователя или учетной записи администратора с возможностью перейти в дальнейшем на соответственные виджеты — интерфейс регистрации - авторизации или виджет интерфейса завода.
# Регистрация - авторизация в системе admin_widget_reg_log.html 
### Данный виджет — примитив для регистрации - авторизации  администратора с возможностью перейти  на следующий виджет - интерфейс администратора. Есть возможность переключаться посредством кнопок на разные режимы — авторизации или регистрации. Помимо всего, на этом, как и многих других виджетах, есть функция возврата на стартовую страницу - первый демонстрационный интерфейс с выбором типа учетной записи.                                                                                                                                                                    
# Виджет администратора  admin_widget_start_screen.html
### Данная страница — переход после виджета регистрации — авторизации к виджету таблицы базы данных. Есть возможность перехода на стартовую страницу.                                                                                                                                
# Таблица базы данных index.html                                                                                         
### Данный интерфейс несет наибольшую и основную функциональную нагрузку среди всего приложения, также именно здесь посредством нажатия соответствующих объектов — кнопок можно реализовать цель\смысл данной работы — реализовать приоритетную очередь с помощью двоичной кучи. Итак, функционал страницы таков: на сайте автоматически размещается таблица — база данных, с которой будут происходить непосредственные изменения, связанные с взаимодействием посредством нажатия кнопок и ручного ввода данных. На интерфейсе присутствует ряд объектов -  кнопки: «добавить строку», «сохранить в базе», «выберите файл», «заменить базу», «удалить», «сортировать по столбцу 1...5». Кнопка «добавить строку» - добавляет пустую строку из 5 ячеек в конце таблицы. Кнопка «сохранить данные в базе» - сохраняет измененные данные в интерфейсе  непосредственно в файл data.txt – базу данных. Кнопка  «выберите файл» -выбирает файл из компьютера для дальнейшего взаимодействия. Кнопка «заменить базу» — заменяет благодаря кнопке «выберите файл» базу данных на новую, расположенную в новом файле, также уничтожая  прежнюю информацию в базе данных. Кнопка «удалить», расположенная напротив каждой строки, удаляет конкретную строку, к которой и прикреплена. Кнопки «сортировать по столбцу 1...5» выполняют основную функцию данного проекта, сортируя данные, как то указано в задании; кнопки сортировки сортируют соответственно описанному столбцу. Ссылка «скачать таблицу» - скачивает при взаимодействии таблицу — базу данных из файла data.txt. Также есть кнопка перехода на стартовый экран.                                                                          
# Сайт - интерфейс завода Сайт -  main_widget.html.
### Данный виджет — представительная визитка завода, потенциально предоставляющая информационные ресурсы пользователю для непосредственного изучения\выбора перехода. Действующий единственный переход для пользователя производится через ссылку «заказать».
# Заказ товаров user_order.html  
### Данный виджет — главный для пользователя. Интерфейс позволяет через ввод данных в ячейки и нажатие на кнопку «записать в базу» - добавить данные в базу данных, а именно — файл data.txt. Также в данном  виджете существуют возможности перехода на главный экран — визитку завода и на стартовый экран ; и возможность перейти на виджет удачных заказов, в случае успеха заказа, и на виджет неудачных заказов , в случае неуспеха , посредством, например, ввода пробелов в ячейки и попытки отправки  формы в базу данных.                                 
# Оповещение неудачных заказов user_order_fail.html 
###  Данный виджет встречается в случае ошибок — сработанных исключений. Есть возможность перейти на стартовый экран ,экран заказа товаров, экран завода.
# Оповещение удачных заказов user_order_sucess.html  
### Данный виджет встречается в случае успеха заказа. Есть возможность перейти на стартовый экран ,экран заказа товаров, экран завода.       
# Обработка исключений 
### В данной программе существуют некоторые исключения. Связаны они,в основе своей, с деятельностью пользователя, так, исключения существуют в виджете заказа: всплывающее окно, оповещающее «заполните это поле»,когда пользователь пытается нажать на кнопку «записать в базу», еще не заполнив все ячейки. Также предусмотрены исключения на ввод пробелов — переход на новый виджет — виджет «неудачных заказов». Помимо этого, есть исключение на обработку нажатия кнопки без отправки формы с оповещением «Ошибка: Неверный метод запроса.». 
