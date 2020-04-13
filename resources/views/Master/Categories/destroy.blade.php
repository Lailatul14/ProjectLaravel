@extends('admin/admin')
@section('konten')

@if($cat->CATEGORY_STATUS == 0)
                                    <td><span class="badge badge-succsess">Active</span></td>
                                    @else
                                    <td><span class="badge badge-danger">Non-Actif</span></td>
                                    @endif
@endsection