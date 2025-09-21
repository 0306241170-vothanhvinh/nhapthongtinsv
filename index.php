<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="info.php" method="post">
        <label><h1>Nhập thông tin sinh viên</h1></label>
        MSSV: <input type="text" name="mssv" /><br>
        Họ tên: <input type="text" name="hoten"/><br>
        Giới tính: 
        <input type="radio" name="men" value="0" checked/> Nam
        <input type="radio" name="women" value="1"/> Nữ	
        <br>
        Ngôn ngữ lập trình: 
        <input type="checkbox" name="c++" value="0"/> C++
        <input type="checkbox" name="php" value="1"/> PHP
        <br>
        Thành phố:
        <select name="city">
            <optgroup label="Thành phố">
                <option>Hà Nội</option>
                <option>Sài Gòn</option>
                <option>Huế</option>
                <option>Cà Mau</option>
             </optgroup>
        </select>
        <br>
        <label>Tin nhắn:</label>
        <br>
        <textarea rows="4" cols="20" name="tin_nhan"></textarea>
        <br>
        <button type="submit">Gửi</button>
    </form>
</body>
</html>