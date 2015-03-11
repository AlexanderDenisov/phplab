<form action="/FindByColumn/Find" method="post">

    <div><select name="column">
            <option selected="selected">Выберите атрибут поиска</option>
            <option name="title" id="title" value="title">По названию</option>
            <option name="text_news" id="text_news" value="text_news">По содержанию</option>
        </select></div>

    <div><label for="values">Введите значение для поиска</label></div>
    <div><textarea id="values" rows="10" cols="25" maxlength="250" name="values"></textarea></div>

    <div><input type="submit" value="Найти"></div>
</form>