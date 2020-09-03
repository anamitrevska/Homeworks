<template>
  <div class="container">
    <!-- Button trigger modal -->
    <slot name ="heading"></slot>

    <slot name ="launch-button"></slot>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

        <slot name ="modal-header"></slot>
        <slot name ="modal-body"></slot>
        <slot name ="modal-footer"></slot>
   
          </div>
        </div>
      </div>
 </div>

</template>

<script>
export default {};
</script>