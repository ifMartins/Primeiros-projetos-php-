create table public.tabela_camisetas
(
	id_camiseta serial not null
		constraint table_camisetas_pk
			primary key,
	cam_cor varchar,
	cam_referencia integer,
	cam_tamanho varchar,
	cam_descriçao char(50),
	cam_composiçao varchar,
	cam_quantidade integer,
	cam_modelo char
);

alter table public.tabela_camisetas owner to postgres;

create unique index table_camisetas_id_camisetas_uindex
	on public.tabela_camisetas (id_camiseta);

