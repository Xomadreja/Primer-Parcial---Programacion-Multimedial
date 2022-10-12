import pymysql
class DataBase:
    def __init__(self):
        self.connection = pymysql. connect(
        host="127.0.0.1", port=3306,
        user='root',
        password='',
        db='MiBaseAylinBotelo'
        )
        self.cursor=self.connection.cursor()
    def promedioNotasDpto(self):
        sql = "SELECT case xp.dpto WHEN '01'then 'Chuquisaca' WHEN '02'then 'La Paz' WHEN '03'then 'Cochabamba' WHEN '04'then 'Oruro' WHEN '05'then 'Potosí' WHEN '06'then 'Tarija'  WHEN '07'then 'Santa Cruz' WHEN '08'then 'Beni' WHEN '09'then 'Pando' ELSE 'otro' END 'dpto', avg(notaFinal) 'promedio' FROM inscripcion xi, persona xp where xp.ci=xi.ci group by xp.dpto"
        try:
            self.cursor.execute(sql)
            reg = self.cursor.fetchall()
            for data in reg:
                print("Departamento: ", data[0])
                print("Nota Promedio: ", data[1])
                print("______\n")
        except Exception as e:
            raise
        
database = DataBase()
database.promedioNotasDpto()
