<script>
// assign function to onclick property of checkbox

document.getElementById('active').onclick = function() {
    // call toggleSub when checkbox clicked
    // toggleSub args: checkbox clicked on (this), id of element to show/hide
    toggleSub(this, 'active_sub');
};
 
 
// called onclick of checkbox
function toggleSub(box, id) {
    // get reference to related content to display/hide
    var el = document.getElementById(id);
    
    if ( box.checked ) {
        el.style.display = 'block';
    } else {
        el.style.display = 'none';
    }
}

</script>

<form action="#" method="post" class="demoForm" id="demoForm">
    
    <fieldset>
        <legend>Demo: Show/Hide Related Onclick</legend>
    
    <p><input type="checkbox" name="active" id="active" value="1" /> Check if you engage in sports or fitness activities on a regular basis.</p>
    
    <div id="active_sub">
        <p><span>Check which types</span>
        <label><input type="checkbox" name="sports[]" value="cycling" /> cycling</label>
        <label><input type="checkbox" name="sports[]" value="running" /> running</label>
        <label><input type="checkbox" name="sports[]" value="visit gym" /> visit gym</label>
        <label><input type="checkbox" name="sports[]" value="swimming" /> swimming</label>
        <label><input type="checkbox" name="sports[]" value="team sports" /> team sport(s)</label>
        <label><input type="checkbox" name="sports[]" value="other" /> other</label></p>
    </div>
    
    </fieldset>
    
</form>