<x-heder />

<main style="padding: 20px;" >
    <h2>Журналист</h2>
    <form style="display: flex; flex-direction: column; max_width: 400 px;">
        <label>Заголовок:</label>
        <input tupy="text" placeholder="Напишите текст" style="margin-bottom: 10px; padding: 5px;">

        <label>Текс статьи:</label>
        <textarea rows="5" placeholder="Напишите текст" style="margin-bottom: 10px; padding: 5px;"></textarea>

        <button type="button" style=" padding: 10px; backround: green; color: white; boder: none;">Сохранить</button>
    </form>
</main>
 
<x-footer />