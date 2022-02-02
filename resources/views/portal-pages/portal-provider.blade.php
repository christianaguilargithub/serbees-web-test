
@extends('layouts.portal')
<link rel="stylesheet" href="{{ asset('css/portal-provider.css') }}" type="text/css">
@section('content')

<div class="overall-portal-provider">

  {{-- MODAL --}}
  <div class="modal-container2" id="modal_container2">
    <div class="modal2">
      <div class="client-details-title">
        <p style="font-size: 18px; margin:0px; font-weight:700;">Provider Registration Details</p> <p style="font-size: 18px; margin:0px; font-weight:700;cursor: pointer;" id="close2">&#215;</p> 
      </div>
      <div class="client-details-container">
        <div class="client-details">
          <div class="client-details-name-1">
            <p style="margin-bottom:0px;font-size:16px;">Transaction Number 975</p> 
              <div style="display: flex;flex-direction:row; justify-content:center;align-content:center;"><img class="dl-provider-reg"src="{{asset('images/dl.svg')}}" alt=""><div class="status-box-active-blue">Pending Requirements</div></div>
          </div>
          <p style="text-align:left; margin: 0px 0px 10px 0px; font-weight:700;font-size:30px">Maria Anders</p>
          <p style="text-align:left; margin: 0px 0px 20px 5px;">blk n3 lot 3 Emmanuel Bergado I DASMARIÑAS CAVITE REGION IV-A (CALABARZON)</p>
          <table style="width:100%;line-height:100%; border-top: 1px solid #C4C4C4;">
            
            <tr>
              <th style="padding-top: 20px;">Payment Trace No</th>
              <td style="padding-top: 20px;">9096028672380CC6</td>
            </tr>
            <tr>
              <th>Date Submitted</th>
              <td>Feb 14,2021 07:56 AM</td>
            </tr>
            <tr>
              <th>Service</th>
              <td>Tailor/Sewer (Alteration Service)</td>
            </tr>
            <tr>
              <th>Email</th>
              <td>mariaanders@email.com</td>
            </tr>
            <tr>
              <th>Contact Number</th>
              <td>09051234567</td>
            </tr>
            <tr>
              <th>Birthday</th>
              <td>Mar 02, 1966</td>
            </tr>
            <tr>
              <th>Age</th>
              <td>55 years old</td>
            </tr>
            <tr>
              <th>Gender</th>
              <td>Female</td>
            </tr>
            <tr>
              <th>Invited by</th>
              <td>N/A</td>
            </tr>
           
          </table>
            
           
          <div class="client-details-buttons">
            <button style="border: 1px solid #C4C4C4; width: 260px; height: 50px; background-color: #FFC130; color:#fff; border-radius: 4px; margin-right:7.5px">Pend Requirements</button>
            <button style=" width: 260px; height: 50px; background-color: #2ECC71; color:#FFF; border-radius: 4px; margin-left:7.5px">Approve</button>
          </div>
          <button id="close1" style="border: 1px solid #C4C4C4; width: 540px; height: 50px; background-color: #FFF; color:#6A6A6A; border-radius: 4px; margin-right:7.5px">Close</button>
        </div>
      </div>
    </div>
  </div>

 {{-- END OF MODAL --}}

    <div class="provider-list-container">
      <div class="portal-provider-container">
        <div class="provider-status">
            <div class="total-provider">
                <p class="portal-provider-status">Total Clients</p>
                <p class="portal-provider-status-count">326</p>
            </div>
            <div class="register-today">
                <p class="portal-provider-status">Registered Today</p>
                <p class="portal-provider-status-count">20</p>
            </div>
            <div class="register-today">
                <p class="portal-provider-status">Pending Requirements</p>
                <p class="portal-provider-status-count">326</p>
            </div>
            <div class="register-today">
                <p class="portal-provider-status">Pending Approval</p>
                <p class="portal-provider-status-count">20</p>
            </div>
        </div>
    </div>
        <div class="provider-list-menu">
            <div class="provider-list-number-sort-container">
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
            <div class="provider-list-search-container">
                <input data-provide="typeahead" data-items="4"  type="text" class="search-query">
            </div>
        </div>
        <div class="provider-list">
            <table id="customers" cellspacing="0" cellpadding="0">
                <tr style="border-bottom: 1px solid #ddd;">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Service</th>
                  <th>Mobile Number</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Maria Anders</td>
                  <td>Aircon Cleaning and Repair</td>
                  <td>09051234567</td>
                  <td><div class="status-box-pending">Pending Requirements</div></td>
                  <td><p id="open1">View details</p></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Christina Berglund</td>
                  <td>Aircon Cleaning and Repair</td>
                  <td>09051234567</td>
                  <td><div class="status-box-approved">Approved</div></td>
                  <td><p id="open2">View details</p></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Francisco Chang</td>
                  <td>Aircon Cleaning and Repair</td>
                  <td>09051234567</td>
                  <td><div class="status-box-pending">Pending Requirements</div></td>
                  <td><p id="open3">View details</p></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Roland Mendel</td>
                  <td>Aircon Cleaning and Repair</td>
                  <td>09051234567</td>
                  <td><div class="status-box-pending">Pending Requirements</div></td>
                  <td><p id="open4">View details</p></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Helen Bennett</td>
                  <td>Aircon Cleaning and Repair</td>
                  <td>09051234567</td>
                  <td><div class="status-box-pending">Pending Requirements</div></td>
                  <td><p id="open5">View details</p></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Philip Cramer</td>
                  <td>Aircon Cleaning and Repair</td>
                  <td>09051234567</td>
                  <td><div class="status-box-pending">Pending Requirements</div></td>
                  <td><p id="open6">View details</p></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Yoshi Tannamuri</td>
                  <td>Aircon Cleaning and Repair</td>
                  <td>09051234567</td>
                  <td><div class="status-box-pending">Pending Requirements</div></td>
                  <td><p id="open7">View details</p></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Giovanni Rovelli</td>
                  <td>Aircon Cleaning and Repair</td>
                  <td>09051234567</td>
                  <td><div class="status-box-pending">Pending Requirements</div></td>
                  <td><p id="open8">View details</p></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Simon Crowther</td>
                  <td>Aircon Cleaning and Repair</td>
                  <td>09051234567</td>
                  <td><div class="status-box-pending">Pending Requirements</div></td>
                  <td><p id="open9">View details</p></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Marie Bertrand</td>
                  <td>Aircon Cleaning and Repair</td>
                  <td>09051234567</td>
                  <td><div class="status-box-pending">Pending Requirements</div></td>
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
