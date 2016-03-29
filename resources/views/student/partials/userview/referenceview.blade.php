<div class="padsmall">
  <h4>References</h4>
@if(count($refs)>0)



@foreach($refs as $ref)



  <table class="table table-bordered">
   <thead class="text-primary">
     <th>
       Referred By

     </th>
     <th>
       Reference
     </th>
     <th>
       Contact
     </th>
     <th>
       verification
     </th>
     <th>
       Delete
     </th>

   </thead>
   <tbody>
     <tr>
       <td>
         {{$ref->referred_by}}
       </td>
       <td>
        {{ $ref->reference_description}}
       </td>
       <td>
         {{$ref->referee_number}}
       </td>
       @if($ref->verified===0)
       <td>
         <i class="fa fa-thumbs-o-down fa-3x"></i>
          </td>
       @else
         <td>
              <i class="medium material-icons">verified_user</i>
         </td>
     @endif
       <td>
         <form action="{{url('refdelete',$ref->id)}}" method="POST">
           {!! csrf_field() !!}
           <button type="submit" class="btn btn-danger ">
             <i class="fa fa-cross"></i> Delete
           </button>
         </form>
       </td>

     </tr>
   </tbody>
  </table>


@endforeach
</div>
@else
  <h4>No Reference added yet</h4>
@endif
