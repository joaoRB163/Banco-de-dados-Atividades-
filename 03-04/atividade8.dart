void main(){
  List<String> listaString = ["Abacate","Amora","Abacaxi","Banana","Leite","Uva","Mexirica","Cabaço","Verde"];
  print("Sua lista: $listaString");
  String Letra = "a";
  int cont = 0;
  for(int i = 0; i < listaString.length; i++){
    if(listaString[i] == Letra){
      cont++;
    }
  }
  print("$cont");
}