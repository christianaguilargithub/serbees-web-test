@extends('layouts.portal')
<link rel="stylesheet" href="{{ asset('css/portal-client.css') }}" type="text/css">
@section('content')

<div class="overall-portal-client">
    
    <div class="client-list-container">
      <div class="portal-client-container">
        <div class="client-status">
            <div class="total-client">
                <p class="portal-client-status">Total Clients</p>
                <p class="portal-client-status-count">326</p>
            </div>
            <div class="register-today">
                <p class="portal-client-status">Registered Today</p>
                <p class="portal-client-status-count">20</p>
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
                  <th>Name</th>
                  <th>Email Address</th>
                  <th>Mobile Number</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Christina Berglund</td>
                  <td>mariaanders@email.com</td>
                  <td>09051234567</td>
                  <td><div class="status-box-active">Active Account</div></td>
                  <td><a href="">View details</a>
                  
                  
                  
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Christina Berglund</td>
                  <td>mariaanders@email.com</td>
                  <td>09051234567</td>
                  <td><div class="status-box-inactive">Inactive Account</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Francisco Chang</td>
                  <td>mariaanders@email.com</td>
                  <td>09051234567</td>
                  <td><div class="status-box-active">Active Account</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Roland Mendel</td>
                  <td>mariaanders@email.com</td>
                  <td>09051234567</td>
                  <td><div class="status-box-active">Active Account</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Helen Bennett</td>
                  <td>mariaanders@email.com</td>
                  <td>09051234567</td>
                  <td><div class="status-box-active">Active Account</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Philip Cramer</td>
                  <td>mariaanders@email.com</td>
                  <td>09051234567</td>
                  <td><div class="status-box-active">Active Account</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Yoshi Tannamuri</td>
                  <td>mariaanders@email.com</td>
                  <td>09051234567</td>
                  <td><div class="status-box-active">Active Account</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Giovanni Rovelli</td>
                  <td>mariaanders@email.com</td>
                  <td>09051234567</td>
                  <td><div class="status-box-active">Active Account</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Simon Crowther</td>
                  <td>mariaanders@email.com</td>
                  <td>09051234567</td>
                  <td><div class="status-box-active">Active Account</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Marie Bertrand</td>
                  <td>mariaanders@email.com</td>
                  <td>09051234567</td>
                  <td><div class="status-box-active">Active Account</div></td>
                  <td><a href="">View details</a></td>
                </tr>
              </table>
        </div>
    </div>
</div>


<button id="open2">
  click me please
</button>

<div class="modal-container2" id="modal_container2">
  <div class="modal2">
    <h1>Modals are cool</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores architecto voluptatum corporis suscipit? At tempore voluptatum eaque neque animi? Recusandae neque dolorem, praesentium ullam numquam sint id provident ea quisquam.</p>
    <button id="close2" >Close me</button>
  </div>
</div>

<script>
  const open2 = document.getElementById('open2');
  const modal_container2 = document.getElementById('modal_container2');
  const close2 = document.getElementById('close2');

  open2.addEventListener('click', () => {
    modal_container2.classList.add('show');
  })

  close2.addEventListener('click', () => {
    modal_container2.classList.remove('show');
  })
</script>
@endsection

