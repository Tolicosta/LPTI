package br.com.lp2.util;

import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Configuration;
import org.springframework.context.annotation.Import;
import org.springframework.data.mongodb.repository.config.EnableMongoRepositories;


@Configuration
@ComponentScan({ "br.com.lp2.util", "br.com.lp2.spring.mongo"})
@EnableMongoRepositories("br.com.lp2.spring.mongo")
@Import({ MongoConfig.class })
public class AppConfig {

}
