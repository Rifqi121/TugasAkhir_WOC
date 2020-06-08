<style media="screen">
body{
	background-color: rgba(0, 136, 169, 1);
}
	.sukses{
		background-color: green;
	}
	.error{
		background-color: red;
	}
	.body{
		width: 380px;
		height: 280px;
		position: relative;
		margin: 6% auto;
		background: rgba(255,255,255, 0.9);
		padding: 5px;
		box-shadow: 2px 2px 2px #444;
		border-radius: 20px;
		overflow: hidden;
	}
	table{
		height: 60%;
	}

</style>

<body>
	@if(session('success'))
	<div class="sukses">
	{{ session('success') }}
	</div>
	@endif

	@if(session('error'))
	<div class="error">
	{{ session('error') }}
	</div>
	@endif

	<div class="body">
		<h1>Form Editpage</h1>
		<form action="{{ url('edit', @$editpage->id ) }}" method="POST">
			@csrf

			@if(!empty($editpage))
				@method('PATCH')
			@endif

		<table>
			<tr>
				<td>Nama Negara:</td>
				<td><input type="text" name="negara" value="{{ old('negara', @$editpage->negara) }}"></td>
			</tr>

			<tr>
				<td>Jumlah Kasus:</td>
				<td><input type="text" name="kasus" value="{{ old('kasus', @$editpage->kasus) }}"></td>
			</tr>

			<tr>
				<td>Jumlah Korban Meninggal:</td>
				<td><input type="text" name="meninggal" value="{{ old('meninggal', @$editpage->meninggal) }}"></td>
			</tr>

			<tr>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
		</form>

	</div>

</body>
