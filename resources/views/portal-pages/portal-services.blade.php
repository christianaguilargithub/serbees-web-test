@extends('layouts.portal')
<link rel="stylesheet" href="{{ asset('css/portal-services.css') }}" type="text/css">
@section('content')

<div class="overall-portal-client">
  <div class="modal-container2" id="modal_container2">
    <div class="modal2">
      <div class="client-details-title">
        <p style="font-size: 18px; margin:0px; font-weight:700;">Service Details</p> <p style="font-size: 18px; margin:0px; font-weight:700;cursor: pointer;" id="close2">&#215;</p> 
      </div>
      <div class="client-details-container">
        <div class="client-details">
          <div class="client-details-name-1">
            <p style="margin-bottom:0px;font-size:16px;">Sports and training Lessons</p> 
              <div style="display: flex;flex-direction:row; justify-content:center;align-content:center;"><div class="status-box-active-1">ENABLE</div></div>
          </div>
          <p style="text-align:left; margin: 0px 0px 10px 0px; font-weight:700;font-size:30px">Badminton Lessons</p>
          <table style="width:100%;line-height:100%; border-top: 1px solid #C4C4C4;">
            
            <tr>
              <th style="padding-top: 20px;">Terminology</th>
              <td style="padding-top: 20px;">Badminton Coach</td>
            </tr>
            <tr>
              <th style="padding-top: 20px; padding-bottom:20px;">Description</th>
              <td style="padding-top: 20px; padding-bottom:20px;">The service provider coaches clients hand-eye coordination, stroke play and other badminton techniques. The client must specify in the message field their skill level - beginner, intermediary or advance before booking the service.</td>
            </tr>
            <tr>
              <th>Min Price</th>
              <td>200</td>
            </tr>
            <tr>
              <th>Max Price</th>
              <td>1000</td>
            </tr>
            <tr>
              <th>Payment Type</th>
              <td>Per Hour</td>
            </tr>
            <tr>
              <th>Same day booking</th>
              <td>No</td>
            </tr>
            <tr>
              <th>For consultation</th>
              <td>No</td>
            </tr>
            
           
          </table>
            
          <button style="border: 1px solid #C4C4C4; width: 540px; height: 50px; background-color: #007bff; color:#fff; border-radius: 4px; margin-right:7.5px;margin-top:20px">UPDATE</button>
          <div class="client-details-buttons">
            <button id="close1" style="border: 1px solid #C4C4C4; width: 260px; height: 50px; background-color: #FFF; color:#6A6A6A; border-radius: 4px; margin-right:7.5px">CLOSE</button>
            <button style=" width: 260px; height: 50px; background-color: #E74C3C; color:#FFF; border-radius: 4px; margin-left:7.5px">DISABLE</button>
          </div>
         
        </div>
      </div>
    </div>
  </div>
    <div class="client-list-container">
      <div class="portal-client-container">
        <div class="client-status">
            <div class="total-client-service">
                <p class="portal-client-status">Add a new service</p>
            </div>
        </div>
    </div>
        <div class="client-list-menu">
            <div class="client-list-number-sort-container">
                <label for="numberSelect">Show </label>
                <select class="select-box" name="numberSelect" id="numberSelect">
                    <option style="width:60px" value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="client-list-search-container">
                <input data-provide="typeahead" data-items="4"  type="text" class="search-query">
            </div>
        </div>
        <div class="client-list">
            <table id="customers" cellspacing="0" cellpadding="0">
                <tr style="border-bottom: 1px solid #ddd;">
                  <th>ID</th>
                  <th>Service Name</th>
                  <th>Category</th>
                  <th>Min Price</th>
                  <th>Max Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Swimming Lessons</td>
                  <td>Sports Training & Lessons</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-enabled">ENABLED</div></td>
                  <td><p id="open1">View details</p></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Swimming Lessons</td>
                  <td>Sports Training & Lessons</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-enabled">ENABLED</div></td>
                  <td><p id="open2">View details</p></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Academic Tutor</td>
                  <td>Learning & Development</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-enabled">ENABLED</div></td>
                  <td><p id="open3">View details</p></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Body Tattoo</td>
                  <td>Beauty & Fashion</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-enabled">ENABLED</div></td>
                  <td><p id="open4">View details</p></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Massage</td>
                  <td>Wellness & Fitness</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-enabled">ENABLED</div></td>
                  <td><p id="open5">View details</p></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Veterinary Services</td>
                  <td>Pet Care</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-enabled">ENABLED</div></td>
                  <td><p id="open6">View details</p></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Haircut</td>
                  <td>Beauty & Fashion</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-enabled">ENABLED</div></td>
                  <td><p id="open7">View details</p></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Laundry</td>
                  <td>Household Chores</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-enabled">ENABLED</div></td>
                  <td><p id="open8">View details</p></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Ironing Clothes</td>
                  <td>Household Chores</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-disabled">DISABLED</div></td>
                  <td><p id="open9">View details</p></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Real Estate Agents</td>
                  <td>Sports Training & Lessons</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-disabled">DISABLED</div></td>
                  <td><p id="open10">View details</p></td>
                </tr>
              </table>
        </div>
    </div>
</div>
<script>
  const open1 = document.getElementById('open1');
  const open2 = document.getElementById('open2');
  const open3 = document.getElementById('open3');
  const open4 = document.getElementById('open4');
  const open5 = document.getElementById('open5');
  const open6 = document.getElementById('open6');
  const open7 = document.getElementById('open7');
  const open8 = document.getElementById('open8');
  const open9 = document.getElementById('open9');
  const open10 = document.getElementById('open10');
  const modal_container1 = document.getElementById('modal_container1');
  const modal_container2 = document.getElementById('modal_container2');
  const modal_container3 = document.getElementById('modal_container3');
  const modal_container4 = document.getElementById('modal_container4');
  const modal_container5 = document.getElementById('modal_container5');
  const modal_container6 = document.getElementById('modal_container6');
  const modal_container7 = document.getElementById('modal_container7');
  const modal_container8 = document.getElementById('modal_container8');
  const modal_container9 = document.getElementById('modal_container9');
  const modal_container10 = document.getElementById('modal_container10');
  const close1 = document.getElementById('close1');
  const close2 = document.getElementById('close2');
  const close3 = document.getElementById('close3');
  const close4 = document.getElementById('close4');
  const close5 = document.getElementById('close5');
  const close6 = document.getElementById('close6');
  const close7 = document.getElementById('close7');
  const close8 = document.getElementById('close8');
  const close9 = document.getElementById('close9');
  const close10 = document.getElementById('close10');

  open1.addEventListener('click', () => {
    modal_container2.classList.add('show');
  })
  open2.addEventListener('click', () => {
    modal_container2.classList.add('show');
  })
  open3.addEventListener('click', () => {
    modal_container2.classList.add('show');
  })
  open4.addEventListener('click', () => {
    modal_container2.classList.add('show');
  })
  open5.addEventListener('click', () => {
    modal_container2.classList.add('show');
  })
  open6.addEventListener('click', () => {
    modal_container2.classList.add('show');
  })
  open7.addEventListener('click', () => {
    modal_container2.classList.add('show');
  })
  open8.addEventListener('click', () => {
    modal_container2.classList.add('show');
  })
  open9.addEventListener('click', () => {
    modal_container2.classList.add('show');
  })
  open10.addEventListener('click', () => {
    modal_container2.classList.add('show');
  })

  close1.addEventListener('click', () => {
    modal_container2.classList.remove('show');
  })
  close2.addEventListener('click', () => {
    modal_container2.classList.remove('show');
  })
  close3.addEventListener('click', () => {
    modal_container2.classList.remove('show');
  })
  close4.addEventListener('click', () => {
    modal_container2.classList.remove('show');
  })
  close5.addEventListener('click', () => {
    modal_container2.classList.remove('show');
  })
  close6.addEventListener('click', () => {
    modal_container2.classList.remove('show');
  })
  close7.addEventListener('click', () => {
    modal_container2.classList.remove('show');
  })
  close8.addEventListener('click', () => {
    modal_container2.classList.remove('show');
  })
  close9.addEventListener('click', () => {
    modal_container2.classList.remove('show');
  })
  close10.addEventListener('click', () => {
    modal_container2.classList.remove('show');
  })
</script>
@endsection

