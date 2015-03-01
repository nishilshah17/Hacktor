var UI = require('ui');

var main = new UI.Card({
  title: 'John Deere',
  subtitle: 'Tracking Your Tractors',
  body: 'Press any button.'
});

main.show();

main.on('click', 'up', function(e) {
  triggerMenu();
});

main.on('click', 'select', function(e) {
  triggerMenu();
});

main.on('click', 'down', function(e) {
  triggerMenu();
});

function triggerMenu() {
  console.log("Experience has been reached");
  var menu = new UI.Menu({
    sections: [{
      items: []
    }]
  });
  var addItems = [{"title": 'Hacktor',"icon": 'images/menu_icon.png', "subtitle": 'Your Tractors'}];
  for(var i = 0; i < 3; i ++) {
    addItems.push({"title": "Tractor "+i, "subtitle": "Location "+i});
  }
  menu.items(0, addItems);
  menu.on('select', function(e) {
    if(e.itemIndex > 0)
      selectedItem(e.item); //still need to cop information for each tractor experience
    console.log('Selected item #' + e.itemIndex + ' of section #' + e.sectionIndex);
    console.log('The item is titled "' + e.item.title + '"');
  });
  menu.show();
}

function selectedItem(itemz) {
  var menu = new UI.Menu({
    sections: [{
      items: []
    }]
  });
  var addItems = [{"title": 'Your Tractor',"icon": 'images/menu_icon.png', "subtitle": itemz.title}];
  for(var i = 0; i < 5; i ++) {
    addItems.push({"title": "Category "+i, "subtitle": "Data "+i});
  }
  menu.items(0, addItems);
  menu.show();
}
