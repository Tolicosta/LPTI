package br.com.lp2.mongodb;

import com.mongodb.MongoClient;

public class MongoConnection {

	private static MongoConnection mgConn;
	private MongoClient mongoClient;
//	private MongoDatabase db;
	
	private MongoConnection(){
		
//		mongoClient = new MongoClient( new MongoClientURI("mongodb://professorhub-dev:p3t3c4d0@ds061777.mlab.com:61777/professorhub"));
//		db = mongoClient.getDatabase("professorhub");
		
	}
	
	public static MongoConnection getConnection(){
		
		if(mgConn == null)
			mgConn = new MongoConnection();
		
		return mgConn;
	}
	
	public MongoClient getClient(){
		
		return mongoClient;
	}
	
//	public MongoDatabase getDatabase(){
//		
//		return db;
//	}
	
		

}
