const random_hex_color_code = () => {
    let n = (Math.random() * 0xffffff * 1000000).toString(16);
    return '#' + n.slice(0, 6);
};

const randomColor = random_hex_color_code();
document.write(randomColor)
  // เลือก element ที่มี id เป็น "myBox"
const myBox = document.getElementById("box");

  // ตั้งค่าสไตล์ให้กับกล่อง
myBox.style.width = "100px";
myBox.style.height = "100px";
myBox.style.backgroundColor = randomColor;