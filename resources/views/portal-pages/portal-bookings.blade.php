
@extends('layouts.portal')
<link rel="stylesheet" href="{{ asset('css/portal-bookings.css') }}" type="text/css">
@section('content')

<div class="overall-portal-provider">
    <div class="provider-list-container">
      <div class="portal-provider-container">
        <div class="provider-status">
            <div class="total-provider">
                <p class="portal-provider-status">Total Bookings</p>
                <p class="portal-provider-status-count">326</p>
            </div>
            <div class="register-today">
                <p class="portal-provider-status">Completed</p>
                <p class="portal-provider-status-count">20</p>
            </div>
            <div class="register-today">
                <p class="portal-provider-status">Ongoing Jobs</p>
                <p class="portal-provider-status-count">326</p>
            </div>
            <div class="register-today">
                <p class="portal-provider-status">Cancellations</p>
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
                  <th>Service</th>
                  <th>Client</th>
                  <th>Provider</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Locksmith</td>
                  <td>Maria Anders</td>
                  <td>Serbees Account</td>
                  <td><div class="status-box-completed">Completed by the System</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Locksmith</td>
                  <td>Maria Anders</td>
                  <td>Serbees Account</td>
                  <td><div class="status-box-completed">Completed</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Locksmith</td>
                  <td>Maria Anders</td>
                  <td>Serbees Account</td>
                  <td><div class="status-box-cancelled">Cancelled by client</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Locksmith</td>
                  <td>Maria Anders</td>
                  <td>Serbees Account</td>
                  <td><div class="status-box-completed">Completed by the System</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Locksmith</td>
                  <td>Maria Anders</td>
                  <td>Serbees Account</td>
                  <td><div class="status-box-completed">Completed by the System</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Locksmith</td>
                  <td>Maria Anders</td>
                  <td>Serbees Account</td>
                  <td><div class="status-box-completed">Completed by the System</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Locksmith</td>
                  <td>Maria Anders</td>
                  <td>Serbees Account</td>
                  <td><div class="status-box-completed">Completed by the System</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Locksmith</td>
                  <td>Maria Anders</td>
                  <td>Serbees Account</td>
                  <td><div class="status-box-completed">Completed by the System</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Locksmith</td>
                  <td>Maria Anders</td>
                  <td>Serbees Account</td>
                  <td><div class="status-box-completed">Completed by the System</div></td>
                  <td><a href="">View details</a></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Locksmith</td>
                  <td>Maria Anders</td>
                  <td>Serbees Account</td>
                  <td><div class="status-box-completed">Completed by the System</div></td>
                  <td><a href="">View details</a></td>
                </tr>
              </table>
        </div>
    </div>
</div>



@endsection
