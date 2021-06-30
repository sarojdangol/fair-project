import 'package:flutter/material.dart';
import 'package:ghar_sewa/Dashboardui.dart';
class Home extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: Drawer(
        child: DashboardUi(),
      ),
      appBar: AppBar(
        centerTitle: true,
        title: Text('GHAR SEWA',
        style: TextStyle(color: Colors.white),),
        backgroundColor: Colors.teal[700],
        
        actions: <Widget>[
          
         
          ///for empty space between
          ///search and menu
          Container(
            width: 30,
            color: Colors.transparent,
          ),
          Icon(
            Icons.account_circle,
          ),
          Container(
            width: 10,
            color: Colors.transparent,
          ),
        ],
      ),
      
    );
  }
}