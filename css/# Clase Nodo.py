# Clase Nodo
class Nodo:
    def _init_(self, info):
        self.Info = info
        self.sig = None


# Clase Lista
class Lista:
    def _init_(self, *elem):
        self.__primero = None
        self.__ultimo = None
        self.__ant_actual = None

        for i in elem:
            self.insertar_ultimo(i)

    def insertar_inicio(self, *elem):
        for i in elem:
            nodo = Nodo(i)
            if (self.__primero != None):
                nodo.sig = self.__primero
            else:
                self.__ultimo = nodo

            self.__primero = nodo

    def insertar_ultimo(self, *elem):
        for i in elem:
            nodo = Nodo(i)
            if (self.__ultimo != None):
                self.__ultimo.sig = nodo
                self._ant_actual = self._ultimo
            else:
                self.__primero = nodo

            self.__ultimo = nodo

    def elimina_primero():
        if (self.__primero == None):
            return

        nodo = self.__primero
        self.__primero = nodo.sig
        del nodo

    def _add_(self, list2):
        list3 = Lista()

        nodo = self.__primero
        while (nodo != None):
            list3.insertar_ultimo(nodo.Info)
            nodo = nodo.sig

        if (type(elem) == int):
            list3.insertar_ultimo(elem)
            return list3

        nodo = list2.__primero
        while (nodo != None):
            list3.insertar_ultimo(nodo.Info)
            nodo = nodo.sig

        return list3

    def info_anterior(self):
        if (self._primero == None or self._ant_actual == None):
            return

        return self.__ant_actual.Info

    def eliminar_elem(self, elem):
        while (self.__primero != None and self.__primero.Info == elem):
            temp = self.__primero
            self.__primero = temp.sig
            del temp

        nodo = self.__primero
        while (nodo != None):
            while (nodo.sig != None and nodo.sig.Info == elem):
                temp = nodo.sig
                if (temp == self.__ultimo):
                    self.__ultimo = nodo
                nodo.sig = temp.sig
                del temp
            nodo = nodo.sig

    def sig(self):
        if (self.__primero == None):
            return
        if (self.__ant_actual == None):
            self._ant_actual = self._primero
            return
        actual = self.__ant_actual.sig
        if (actual.sig != None):
            self.__ant_actual = actual

    def elimina_actual(self):
        if (self.__primero == None):
            return
        if (self.__ant_actual == None):
            temp = self.__primero
            self.__primero = temp.sig
            del temp
        else:
            temp = self.__ant_actual.sig
            self.__ant_actual.sig = temp.sig
            del temp

    def cons(self):
        if (self.__primero == None):
            return
        if (self.__ant_actual == None):
            return self.__primero.Info
        return self.__ant_actual.sig.Info

    def inicio(self):
        self.__ant_actual = None

    def actual_es_ultimo(self):
        if (self.__ant_actual != None):
            if (self._ant_actual.sig == self._ultimo):
                return True
        return False

    def mostrar(self):
        nodo = self.__primero
        while (nodo != None):
            print (nodo.Info)
            nodo = nodo.sig
        print

    def pedirNumeroEntero():
       correcto = False
       num = 0
       while (not correcto):
          try:
             num = int(input("Introduce un numero entero: "))
             print("________________________")
             print()
             correcto = True
             except ValueError:
             print('Error, introduce un numero entero')
          return num
  salir = False
  opcion = 0
  lista1 = Lista()
  while not salir:
  print("------------------------")
  print("Bienvenido al menu")
  print("________________________")
  print()
  print("Opciones disponibles:")
  print("1. Listar los elementos")
  print("2. Agregar")
  print("3. Eliminar el último")
  print("4. Eliminar el primero")
  print("5. Insertar al inicio")
  print("6. Insertar al final")
  print("7. Salir")
  print("________________________")
  print()
  
  print("Elige una opcion")
  
  opcion = pedirNumeroEntero()
  
  if opcion == 1:
     print(lista1.mostrar())
  elif opcion == 2:
     print("Agregar")
  elif opcion == 3:
     lista1.elimina_actual()
  elif opcion == 4:
     lista1.elimina_primero()
  elif opcion == 5:
     dato = pedirNumeroEntero()
     lista1.insertar_inicio(dato)
  elif opcion == 6:
     dato = pedirNumeroEntero()
     lista1.insertar_ultimo(dato)
  elif opcion == 7:
    salir = True
    else:
    print("Introduce un numero entre 1 y 4")
    print("Fin")
