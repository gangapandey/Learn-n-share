const list_items = [
	"Tic Tac Toe using Python",
	"Video Animations",
	"Workable Registration Form ",
	"Web Crawling",
	"Snake Game",
	"Scientific Calculator",
	"Banner Designs",
	"Quiz Game",
	"Wordpress Plugins",
	"Python Calculator",
	"Localsite Crawling",
	"Cyber Security course",
	"CompTIA A",
	"SaaS course",
	"Calculator using Flutter",
	"Practical with Kali Linux",
	"Wordpress clone",
	"Backend Funtions",
	"Cyber Security Course",
	"CompTIA A++",
	"Python Courses",
	"And many more to go"
];

const list_element = document.getElementById('list');
const pagination_element = document.getElementById('pagination');

let current_page = 1;
let rows = 5;

function DisplayList (items, wrapper, rows_per_page, page) {
	wrapper.innerHTML = "";
	page--;

	let start = rows_per_page * page;
	let end = start + rows_per_page;
	let paginatedItems = items.slice(start, end);

	for (let i = 0; i < paginatedItems.length; i++) {
		let item = paginatedItems[i];

		let item_element = document.createElement('div');
		item_element.classList.add('item');
		item_element.innerText = item;
		
		wrapper.appendChild(item_element);
	}
}

function SetupPagination (items, wrapper, rows_per_page) {
	wrapper.innerHTML = "";

	let page_count = Math.ceil(items.length / rows_per_page);
	for (let i = 1; i < page_count + 1; i++) {
		let btn = PaginationButton(i, items);
		wrapper.appendChild(btn);
	}
}

function PaginationButton (page, items) {
	let button = document.createElement('button');
	button.innerText = page;

	if (current_page == page) button.classList.add('active');

	button.addEventListener('click', function () {
		current_page = page;
		DisplayList(items, list_element, rows, current_page);

		let current_btn = document.querySelector('.pagenumbers button.active');
		current_btn.classList.remove('active');

		button.classList.add('active');
	});

	return button;
}

DisplayList(list_items, list_element, rows, current_page);
SetupPagination(list_items, pagination_element, rows);