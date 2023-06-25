@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="/css/ratingModal.css">
@endsection

@section('title')
    <title>Hamily | {{ $title }}</title>
@endsection

@section('contents')
    <div class="container mt-4 bg">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 700px; height: 500px;">
            <div class="modal-content" style="height: 450px;">
                {{-- <div class="modal-header border-0 margin-0">
                </div> --}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-1 mt-2" style="margin-left: 10px">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: #F9C6D1"></button>
                        </div>

                        <div class="col-lg-6 star-all">
                            <div class="star-wrapper col-lg-4">
                                <div class="star-image">
                                    <img src="/img/star-perfect.png" alt="" width="70" height="70" id="star-perfect"> 
                                    <img src="/img/star-good.png" alt="" width="70" height="70" style="display: none;" id="star-good"> 
                                    <img src="/img/star-neutral.png" alt="" width="70" height="70" style="display: none" id="star-neutral"> 
                                    <img src="/img/star-bad.png" alt="" width="70" height="70" style="display: none" id="star-bad"> 
                                    <img src="/img/star-worst.png" alt="" width="70" height="70" style="display: none" id="star-worst"> 
                                </div>
                                <div class="star-text mt-2" id="star-text">
                                    Perfect
                                </div>
                            </div>

                            <div class="star-container">
                                <div class="star-rate col-lg-4" id="rates">
                                    <input type="radio" name="rate" id="rate-5">
                                    <label for="rate-5" class="bi bi-star-fill"></label>
                                    <input type="radio" name="rate" id="rate-4">
                                    <label for="rate-4" class="bi bi-star-fill"></label>
                                    <input type="radio" name="rate" id="rate-3">
                                    <label for="rate-3" class="bi bi-star-fill"></label>
                                    <input type="radio" name="rate" id="rate-2">
                                    <label for="rate-2" class="bi bi-star-fill"></label>
                                    <input type="radio" name="rate" id="rate-1">
                                    <label for="rate-1" class="bi bi-star-fill"></label>
                                    <form action="#">
                                        <header></header>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="title-modal col-lg-3 mt-2">
                            <p class="modal-title " id="exampleModalLabel">REVIEW PRODUCT</p>
                        </div>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px"></textarea>
                        <label for="floatingTextarea" style="color: #F9C6D1">Let us know about your review</label>
                    </div>
                    <div class="term-rate mt-2">
                        review can be seen by many people
                        <img src="/img/info-rate.png" alt="" width="10px" height="10px" style="margin-left: 3px">
                    </div>

                    <div class="recommend-prods mt-4">
                        <span class="recommend-text">Would you like to recommend this product ? </span>
                        <span id="yes-recom" class="recom" onclick="changeColorYes()">
                            Yes
                            <input type="hidden" value="yes" id="tes">
                        </span>
                        <span id="|" class="recom"> | </span>
                        <span id="no-recom" class="recom" onclick="changeColorNo()">
                            No
                            <input type="hidden" value="no" id="tes">
                        </span>
                    </div>
                    <div class="col-lg-12 rateButton-wrap">
                        <button type="submit" class="btn btn-danger border-0 submit-rate" data-bs-toggle="modal" data-bs-target="#exampleModals">SEND</button>
                    </div>

                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="margin-left : 500px">
              <div class="modal-content" style="height : 500px; border-radius : 10px; width:600px; background-color: #D9D9D9">
                <div class="modal-body">
                  <div class="rate-notif">
                    <div class="bungkus">
                        <img src="/img/success-rate.png" alt="" width="400" height="250">
                    </div>
                    <span class="success-msg">Your review has been successfully added</span>
                    <div class="rateButton-wrap">
                      <button type="submit" class="btn btn-danger border-0 submit-rate" style="border-radius : 20px; color : #FFFF;" data-bs-dismiss="modal">Back</button>
                    </div>
                  </div>


                </div>
              </div>
            </div>
        </div>
    </div>

@endsection