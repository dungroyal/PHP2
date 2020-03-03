<br>
<br>
<br>
<br>
<br>
<script>
        document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('#form').onsubmit = () => {
            const request = new XMLHttpRequest();
            const curency = document.querySelector('#curency').value;
            request.open('POST', 'PHP2\Lab08\controller\ajax\curency.php');
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
    }
);

</script>

<form id="form">
  <div class="form-row align-items-center">
    <input type="text" name="curency" id="curency">
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Chuyển đổi</button>
    </div>
    <div class="col-auto my-2">
        <h5>1 VND =  mới tiền</h5>
    </div>
  </div>
</form>
<br>
<br>
<br>
<br>
<br>