var food = 0;

function foodClick(number){
    food = food + number;
    document.getElementById("food").innerHTML =food;
};

var workers = 0;

function buyWorker(){
    var workersCost = Math.floor(10 * Math.pow(1.1,workers));     //works out the cost of this cursor
    if(food >= workersCost){                                   //checks that the player can afford the cursor
        workers = workers + 1;                                   //increases number of cursors
    	food = food - workersCost;                          //removes the cookies spent
        document.getElementById('workers').innerHTML = workers;  //updates the number of cursors for the user
        document.getElementById('food').innerHTML = food;  //updates the number of cookies for the user
    };
    var nextCost = Math.floor(10 * Math.pow(1.1,workers));       //works out the cost of the next cursor
    document.getElementById('workersCost').innerHTML = nextCost;  //updates the cursor cost for the user
};

window.setInterval(function(){
	
	foodClick(workers);
	
}, 1000);