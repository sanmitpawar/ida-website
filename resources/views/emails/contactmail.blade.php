@component('mail::message')
# Contact Lead

Hello please refer contact details below, received from website.


<style>
	
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
  margin: 3rem 0;
}

th, td {
  padding: 15px;
}
</style>

<table>
	<tr>
		<td>Name</td>
		<td>{{ $data['name'] }}</td>
	</tr>
	<tr>
		<td>Email</td>
		<td>{{ $data['email'] }}</td>
	</tr>
	<tr>
		<td>Subject</td>
		<td>{{ $data['subject'] }}</td>
	</tr>
	<tr>
		<td>Message</td>
		<td>{{ $data['message'] }}</td>
	</tr>
</table>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
