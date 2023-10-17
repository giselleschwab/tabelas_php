</div>
<footer>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>

<script>
function setupDataTableWithDateFilter(tableId, dateColumnIndex) {
  let minDate, maxDate;

  DataTable.ext.search.push(function (settings, data, dataIndex) {
    let min = minDate.val();
    let max = maxDate.val();
    let date = new Date(data[dateColumnIndex]);
    //para dados em formatos d/m/Y 
    //let date = moment(data[dateColumnIndex], 'DD/MM/YYYY').toDate();

    if (
        (min === null && max === null) ||
        (min === null && date <= max) ||
        (min <= date && max === null) ||
        (min <= date && date <= max)
    ) {
        return true;
    }
    return false;
  });

  minDate = new DateTime('#min', {
    format: 'MMMM Do YYYY'
  });
  //format: 'DD/MM/YYYY' 
  maxDate = new DateTime('#max', {
    format: 'MMMM Do YYYY'
  });

  let table = $(tableId).DataTable();

  document.querySelectorAll('#min, #max').forEach((el) => {
    el.addEventListener('change', () => table.draw());
  });
}

$(document).ready(function(){
  setupDataTableWithDateFilter('#cursos', 2); 
  setupDataTableWithDateFilter('#alunos', 2); 
});
</script>
  
  </body>
</html>