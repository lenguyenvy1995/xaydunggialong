<div class="button-estimates">
    <button type="button"  data-bs-toggle="modal" data-bs-target="#modal-estimates">
         <i class="fa-solid fa-calculator"></i>
    </button>
 </div>
 <div class="modal fade" id="modal-estimates"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog modal-xl">
       <div class="modal-content">
        <div class="modal-header bg-warning">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
             @includeIf('user.modules.estimates')
        </div>
       </div>
     </div>
   </div>