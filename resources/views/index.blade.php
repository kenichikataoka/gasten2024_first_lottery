@extends('layout')

@section('title')(登録)@endsection

@section('contents')
  <h2 class="text-center fw-bold">抽選会応募フォーム</h2>
  <div class="mt-4"></div>
  <div class="border-bottom"></div>
  <div class="mt-4"></div>
  <div class="status">
    <div class="choice width-20">入力</div>
    <div class="arrow width-20"><i class="fas fa-arrow-right"></i></div>
    <div class="no-choice width-20">確認</div>
    <div class="arrow width-20"><i class="fas fa-arrow-right"></i></div>
    <div class="no-choice width-20">完了</div>
  </div>
  <div class="mt-5"></div>
  <form>
    <p class="fs-6 alert alert-info" role="alert"><span class="badge bg-danger">必須</span> アンケート１</p>
    <div class="col-lg-6">
      <input class="form-control form-control-lg" type="text">
    </div>
    <div class="mt-4"></div>
    <p class="fs-6 alert alert-info" role="alert"><span class="badge bg-danger">必須</span> アンケート２</p>
    <div class="form-check width-95">
      <input class="form-check-input fs-4" type="checkbox" value="" id="flexCheckDisabled">
      <label class="form-check-label fs-4" for="flexCheckDisabled">Disabled checkbox</label>
    </div>
    <div class="form-check width-95">
      <input class="form-check-input fs-4" type="checkbox" value="" id="flexCheckCheckedDisabled">
      <label class="form-check-label fs-4" for="flexCheckCheckedDisabled">Disabled checked checkbox</label>
    </div>
    <div class="mt-4"></div>
    <p class="fs-6 alert alert-info" role="alert"><span class="badge bg-danger">必須</span> アンケート３</p>
    <div class="form-check width-95">
      <input class="form-check-input fs-4" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
      <label class="form-check-label fs-4" for="flexRadioDefault1">Default radio</label>
    </div>
    <div class="form-check width-95">
      <input class="form-check-input fs-4" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
      <label class="form-check-label fs-4" for="flexRadioDefault2">Default checked radio</label>
    </div>
    <div class="mt-4"></div>
    <p class="fs-6 alert alert-info" role="alert">ご意見・ご要望</p>
    <div class="col-lg-11">
      <textarea class="form-control form-control-lg"></textarea>
    </div>
    <div class="mt-5"></div>
    <p class="fs-6 alert alert-success" role="alert"><span class="badge bg-danger">必須</span> メールアドレス</p>
    <div class="col-lg-6">
      <input class="form-control form-control-lg" type="text">
    </div>
    <div class="mt-4"></div>
    <p class="fs-6 alert alert-success" role="alert"><span class="badge bg-danger">必須</span> プレゼントコード</p>
    <div class="col-lg-4">
      <input class="form-control form-control-lg" type="text">
    </div>
    <div class="mt-4"></div>
    <p class="fs-6 alert alert-success" role="alert">お客さま番号</p>
    <div class="col-lg-4">
      <input class="form-control form-control-lg" type="text">
    </div>
    <div class="mt-5"></div>
    <div class="d-grid gap-2 col-md-6 mx-auto">
      <input type="button" class="btn btn-success btn-lg" value="確認画面へ">
    </div>
  </form>
@endsection