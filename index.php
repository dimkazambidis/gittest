<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container bd-content pt-4 pb-5">
        
        <section class="pt-4 pb-4 border-bottom">
            <h1 class="">Git</h1>
        </section>

        <section class="pt-5">
            <h2>Важные функции</h2>

            <div class="card bg-light mt-4">
                <div class="card-body">
                    Необходимо установить Git Bash <a href="https://git-scm.com/downloads" target="_blank">https://git-scm.com/downloads</a><br>
                    Перейти в директорию: <strong>cd "/d/program files/ospanel/domains/git-learn"</strong>
                </div>
            </div>
        </section>
        
        <section class="pt-5">
            <h2>Init</h2>
            <p>Инициализировать пустой репозиторий</p>

            <h4 class="mt-4">Команда</h4>
            <div class="card bg-light mt-4">
                <div class="card-body mb-0">git init</div>
            </div>
        </section>

        <section class="pt-5">
            <h2>Status</h2>
            <p>Показывает состояние рабочего каталога и раздела проиндексированных файлов (<strong>ветка</strong>, <strong>коммит</strong>, <strong>индексированные файлы)</strong></p>

            <h4 class="mt-4">Команда</h4>
            <div class="card bg-light mt-4">
                <div class="card-body mb-0">git status</div>
            </div>
        </section>

        <section class="pt-5">
            <h2>Add</h2>
            <p>Проиндексировать файлы<br> * - добавить все файлы</p>

            <h4 class="mt-4">Команда</h4>
            <div class="card bg-light mt-4">
                <div class="card-body mb-0">git add *</div>
            </div>
        </section>

        <section class="pt-5">
            <h2>Commit</h2>
            <p>Слепок состояния репозитория с комментарием. -m - message</p>

            <h4 class="mt-4">Команда</h4>
            <div class="card bg-light mt-4">
                <div class="card-body mb-0">git commit -m "Text comment"</div>
            </div>
        </section>

        <section class="pt-5">
            <h2>Remote</h2>
            <p>Добавить удаленный репозиторий (связать с удаленным репозиторием).<br> Перед push и pull впервые</p>

            <h4 class="mt-4">Команда</h4>
            <div class="card bg-light mt-4">
                <div class="card-body mb-0">git remote add origin https://github.com/dimkazambidis/gittest.git</div>
            </div>
        </section>

        <section class="pt-5">
            <h2>Push</h2>
            <p>Залить на сервер в указанную ветку. Origin - имя сервера. Master - имя ветки.</p>

            <h4 class="mt-4">Команда</h4>
            <div class="card bg-light mt-4">
                <div class="card-body mb-0">git push -u origin master</div>
            </div>
        </section>

        <section class="pt-5">
            <h2>Pull</h2>
            <p>Выкачать с сервера из указанной ветки. Origin - имя сервера. Master - имя ветки.</p>

            <h4 class="mt-4">Команда</h4>
            <div class="card bg-light mt-4">
                <div class="card-body mb-0">git push -u origin master</div>
            </div>
        </section>

        <section class="pt-5">
            <h2>Branch</h2>
            <p>Показывает текущую ветку и создает или удаляет новые</p>

            <h4 class="mt-4">Команда</h4>
            <div class="card bg-light mt-4">
                <div class="card-body mb-0">git branch</div>
            </div>

            <h4 class="mt-4">Команда создает ветку dimkazambidis</h4>
            <div class="card bg-light mt-4">
                <div class="card-body mb-0">git branch dimkazambidis</div>
            </div>

            <h4 class="mt-4">Команда удаляет ветку dimkazambidis</h4>
            <div class="card bg-light mt-4">
                <div class="card-body mb-0">git branch -D dimkazambidis</div>
            </div>
        </section>

        <section class="pt-5">
            <h2>Checkout</h2>
            <p>Переключает на нужную ветику.</p>

            <h4 class="mt-4">Команда</h4>
            <div class="card bg-light mt-4">
                <div class="card-body mb-0">git checkout dimkazambidis</div>
            </div>
        </section>

        <section class="pt-5">
            <h2>Merge</h2>
            <p>Слияние веток. Из нужной ветк вводим ту, из которой хотим подтянуть изменения.</p>

            <h4 class="mt-4">Команда</h4>
            <div class="card bg-light mt-4">
                <div class="card-body mb-0">git merge dimkazambidis</div>
            </div>
        </section>

        <section class="pt-5">
            <h2>Gitignore</h2>
            <p>Файл <strong>.gitignore</strong> в корне проекта, со списком файлов и директорий, которые не должны попасть в git.</p>

            <h4 class="mt-4">Пример содержимого:</h4>
            <div class="card bg-light mt-4">
                <div class="card-body mb-0">
                    errors.txt<br>
                    /logs
                </div>
            </div>
        </section>
    </div>
    
</body>
</html>