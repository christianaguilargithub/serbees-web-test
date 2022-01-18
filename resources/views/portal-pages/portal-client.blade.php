@extends('layouts.portal')
<link rel="stylesheet" href="{{ asset('css/portal-client.css') }}" type="text/css">
@section('content')
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
    <div class="client-list-container">
        <div class="client-list-menu">
            <div class="client-list-number-sort-container">
                <label for="numberSelect">Show </label>
                <select name="numberSelect" id="numberSelect">
                    <option value="1">1</option>
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
        
    </div>
@endsection

