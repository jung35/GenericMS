var sortBy = $('.player-list-sort-button span')[0];

$(".player-list-sort-label li").on('click', 'label', function ()
{
  if(this.innerHTML != "Clear Sort") {
    sortBy.innerHTML = this.innerHTML;
  } else {
    sortBy.innerHTML = "Sort By";
  }
});
