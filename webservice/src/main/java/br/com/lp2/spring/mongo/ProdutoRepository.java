package br.com.lp2.spring.mongo;

import java.util.List;

import org.springframework.data.domain.Sort;
import org.springframework.data.mongodb.repository.MongoRepository;
import org.springframework.stereotype.Component;

@Component
public interface ProdutoRepository extends MongoRepository<Produto, String>{
	
	List<Produto> findByNome(String nome);
	List<Produto> findAll(Sort sort);
	void deleteById(String id);
}