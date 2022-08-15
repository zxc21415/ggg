<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form action="/lmengine.php" method="get">
  <h1>給定{x1,x2,x3}我會吐出預測值Y</h1>
  請輸入第一個值
  <input type="text" name="x1">
  <br>
  請輸入第二個值
  <input type="text" name="x2">
  <br>
  請輸入第三個值
  <input type="text" name="x3">
  <br>
  <input type="submit">
</form>


<form action="/lmengine.php" method="get">
  <h1>網頁</h1>
  請輸入第一個值
  <input type="text" name="x1">
  <br>
  請輸入第二個值
  <input type="text" name="x2">
  <br>
  請輸入第三個值
  <input type="text" name="x3">
  <br>
  <input type="submit">
</form>

<div class="container">
  <div class="alert alert-secondary" role="alert">
  SVM
</div>
  <div class="row">
    <div class="col-4">
      <form action="/svmengine.php" method="get">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Gamma</label>
          <input type="text" name="gamma" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">new_x</label>
          <input type="text" name="new_x" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

</div>