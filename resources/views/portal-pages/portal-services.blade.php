@extends('layouts.portal')
<link rel="stylesheet" href="{{ asset('css/portal-services.css') }}" type="text/css">
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
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Swimming Lessons</td>
                  <td>Sports Training & Lessons</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-enabled">ENABLED</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Academic Tutor</td>
                  <td>Learning & Development</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-enabled">ENABLED</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Body Tattoo</td>
                  <td>Beauty & Fashion</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-enabled">ENABLED</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Massage</td>
                  <td>Wellness & Fitness</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-enabled">ENABLED</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Veterinary Services</td>
                  <td>Pet Care</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-enabled">ENABLED</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Haircut</td>
                  <td>Beauty & Fashion</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-enabled">ENABLED</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Laundry</td>
                  <td>Household Chores</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-enabled">ENABLED</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Ironing Clothes</td>
                  <td>Household Chores</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-disabled">DISABLED</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Real Estate Agents</td>
                  <td>Sports Training & Lessons</td>
                  <td>200</td>
                  <td>1000</td>
                  <td><div class="status-box-disabled">DISABLED</div></td>
                  <td><a href="">View details</a></td>
                </tr>
              </table>
        </div>
    </div>
</div>
@endsection

