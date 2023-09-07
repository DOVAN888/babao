<form action="/unicode" method ="POST">

<div>
<input type="text"name ="username"placehode ="nhap username..."/>
<input type="hidden"name="_method" value="POST"/>
<!-- thay doi phuong thuc put,delete,post o dong lenh tren -->
</div>
<button type="submit">submit</button>
@csrf
</form>