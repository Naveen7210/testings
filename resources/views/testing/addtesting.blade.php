<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<style>
.container{
    margin-top: 8%;
}

</style>
<x-app-layout>

<div class="container">

<a href="{{route('testing.create')}}">add </a>
    <table class="table">
        <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>present</th>
        <th>absent</th>
        <th>late</th>
        <th>medical</th>
        <th>substitute</th>
        <th>rg</th>
        <th>visitor</th>
        <th>tyfcb</th>
        <th>testimonial</th>
        <th>training</th>
</tr>
</thead>
        <tbody>
            <?php
            $i =0;
            ?>
            @foreach($testings as $testing)
    <tr>
    <td><?php echo $i; ?></td>
    <td>{{$testing->name}}</td>
    <td>{{$testing->present}}</td>
    <td>{{$testing->absent}}</td>
    <td>{{$testing->late}}</td>
    <td>{{$testing->medical}}</td>
    <td>{{$testing->substitute}}</td>
    <td>{{$testing->rg}}</td>
    <td>{{$testing->visitor}}</td>
    <td>{{$testing->tyfcb}}</td>
    <td>{{$testing->testimonial}}</td>
    <td>{{$testing->training}}</td>
</tr>
<?php $i++; ?>
@endforeach
</tbody>
    </table>
</div>
</x-app-layout>
