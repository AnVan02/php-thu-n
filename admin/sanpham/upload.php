
<h1>Tin tức </h1>
    <form action="write_news.php" method="post" enctype="multipart/form-data">
        <label for="name">Tên tin tức:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Mô tả:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="content">Nội dung:</label>
        <textarea id="content" name="content" required></textarea><br><br>

        <label for="hot">Nổi bật:</label>
        <input type="checkbox" id="hot" name="hot"><br><br>
        <label for="hot">không nổi bật :</label>
        <input type="checkbox" id="hot" name="hot"><br><br>


        <label for="photo">Ảnh sản phẩm </label>
        <input type="file" id="photo" name="photo" accept="asset/upload/"><br><br>

        <input type="f" value="Lưu tin tức">
    </form>
<style>
    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

h1 {
    color: #333;
}

label {
    display: block;
    margin-top: 10px;
}

input[type="text"], textarea {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
}

input[type="file"] {
    margin-top: 5px;
}

input[type="submit"] {
    margin-top: 10px;
    padding: 10px 15px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}
</style>

