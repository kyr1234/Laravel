<h2>UPDATE CUSTOMER DETAILS</h2>
<form action="dataupdate" method="POST">
<input type="hidden" name="id" value={{$data['id']}}>
<input type="text" name="name" placeholder="ENTER YOUR NAME" value={{$data['name']}>
<input type="email" placeholder="ENTER YOUR EMAIL" name="email" value={{$data['email']}}>
<button type="submit">SUBMIT</button>
</form>
