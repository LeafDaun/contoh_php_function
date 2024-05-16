
1. CONTOH : pseudocode PROCEDURE
-----------------------------

PROGRAM ProgramUtamaMenghitungLuas
DEKLARASI
z : integer

	PROCEDURE HitungLuas (r:integer)
	DEKLARASI
	L :real
	const phi <- 3.14
	
	ALGORITMA
	L = phi * r * r
	write("luas lingkaran adalah"+L)

ALGORITMA
read(z)
HitungLuas(z)



2. CONTOH : pseudocode FUNCTION
------------------------------

PROGRAM ProgramUtamaMenghitungLuas
DEKLARASI
z : integer

	FUNCTION HitungLuas (r:integer) :real
	DEKLARASI
	L :real
	const phi <- 3.14
	
	ALGORITMA
	L = phi * r * r
	return L

ALGORITMA
read(z)
write("luas lingkaran adalah :"+HitungLuas(z) )