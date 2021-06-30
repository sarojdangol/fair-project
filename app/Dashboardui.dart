import 'package:flutter/material.dart';
class DashboardUi extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      resizeToAvoidBottomInset: true,
      resizeToAvoidBottomPadding: true,
      appBar: AppBar(
        backgroundColor: Colors.teal,
        title: Text('GHAR SEWA'),
      ),
      body: ListView(
        children: <Widget>[
          Container(
            height: 20,
            color: Colors.transparent,
          ),
          singlerow(
            icon: Icons.home,
            name: 'Home',
          ),
        ],
        
        
      ),

      
    );
  }
  Widget singlerow({IconData icon,String name}){
    return Row(
      children: <Widget>[
        Container(
          height: 10,
          width: 30,
          color: Colors.transparent,
        ),
        Icon(icon),
        Container(
          height: 10,
          width: 10,
          color: Colors.transparent,
        ),
        Text(name,style: TextStyle(fontSize: 20,fontWeight: FontWeight.bold),),
      ],

    );
  }
}