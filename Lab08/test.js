document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('#form').onsubmit = () => {
        const request = new XMLHttpRequest();
        const curency = document.querySelector('#curency').value;
        request.open('POST', 'PHP2\Lab08\model\curency.php');
        request.onload = () => {
            const data = JSON.parse(request.responseText);
            if (data.success) {
                const contents = `1 ${curency} bằng ${data.rate} VNĐ `;
                document.querySelector("#result").innerHTML = contents;
            } else {
                document.querySelector("result").innerHTML = 'Lỗ rồi';
            }
        }
        const data = new FormData();
        data.append('curency', curency);
        request.send(data);
        return false;
    }
})